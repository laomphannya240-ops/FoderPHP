//១. ការប្រកាសបណ្ណាល័យ និងទម្រង់ទិន្នន័យ (Library & Structure)
#include <iostream>  // ប្រើសម្រាប់ទាញយកមុខងារ Input/Output (ដូចជា cin, cout)
using namespace std; // ប្រើដើម្បីកុំឱ្យបាច់សរសេរ std:: ពីមុខ cout ឬ cin

// បង្កើតគ្រោងឆ្អឹង (Structure) សម្រាប់ Node នីមួយៗនៃ Tree
struct Node {
    int data;        // កន្លែងសម្រាប់ផ្ទុកតម្លៃលេខរៀង
    Node *left;      // ចង្អុល (Pointer) ទៅកាន់ Node កូនខាងឆ្វេង
    Node *right;     // ចង្អុល (Pointer) ទៅកាន់ Node កូនខាងស្តាំ
};


//២. អនុគមន៍បង្កើត Node ថ្មី (Create Node)
    Node* createNode(int value) {
    Node *newNode = new Node(); // បង្កើត Node ថ្មីមួយនៅក្នុង Memory (Heap)
    newNode->data = value;      // បញ្ចូលតម្លៃលេខទៅឱ្យ Node ថ្មីនោះ
    newNode->left = nullptr;    // កំណត់កូនឆ្វេងឱ្យនៅទទេ (Null) ិន
    newNode->right = nullptr;   // កំណត់កូនស្តាំឱ្យនៅទទេ (Null) សិន
    return newNode;             // ប្រគល់ Node ដែលបង្កើតរួចត្រឡប់ទៅវិញ
}


//3. អនុគមន៍បញ្ចូលទិន្នន័យ (Insert Node)
    Node* insert(Node *root, int value) {
    if(root == nullptr)             // បើ Tree នៅទទេ ឬដើរដល់ចុងបញ្ចប់នៃមែក
        return createNode(value);   // បង្កើត Node ថ្មីនៅទីនោះភ្លាម

    if(value < root->data)          // បើតម្លៃថ្មី តូចជាង តម្លៃ Node មេ
        root->left = insert(root->left, value);   // រត់ទៅរកខាងឆ្វេង (Recursion)
    else if(value > root->data)     // បើតម្លៃថ្មី ធំជាង តម្លៃ Node មេ
        root->right = insert(root->right, value); // រត់ទៅរកខាងស្តាំ (Recursion)

    return root; // ប្រគល់ Node មេត្រឡប់ទៅវិញក្រោយពេលបញ្ចូលរួច
}


//៤. អនុគមន៍ស្វែងរកតម្លៃតូចបំផុត និងលុបទិន្នន័យ (Delete Node)
// អនុគមន៍ស្វែងរក Node ដែលមានតម្លៃតូចបំផុត (រត់ទៅឆ្វេងបំផុត)
Node* findMin(Node *root) {
    while(root->left != nullptr) // ឱ្យតែខាងឆ្វេងមាន Node ទៀត វានឹងរត់ទៅមុខរហូត
        root = root->left;
    return root;                 // ប្រគល់ Node តូចបំផុតនោះត្រឡប់ទៅវិញ
}

Node* deleteNode(Node *root, int key) {
    if(root == nullptr) return nullptr; // បើរកលេខលុបមិនឃើញ ឬ Tree ទទេ

    // ១. ស្វែងរក Node ដែលត្រូវលុប
    if(key < root->data) 
        root->left = deleteNode(root->left, key);
    else if(key > root->data) 
        root->right = deleteNode(root->right, key);
    
    // ២. នៅពេលរកឃើញ Node ដែលត្រូវលុបហើយ (key == root->data)
    else {
        // ករណីទី១: Node នោះគ្មានកូនទាល់តែសោះ (Leaf Node)
        if(root->left == nullptr && root->right == nullptr) {
            delete root;     // លុបវាចេញពី Memory
            return nullptr;  // កំណត់កន្លែងនោះឱ្យទៅជាទទេវិញ
        }
        // ករណីទី២: Node នោះមានកូនតែខាងស្តាំមួយ (គ្មានកូនឆ្វេង)
        else if(root->left == nullptr) {
            Node *temp = root->right; // ចម្លងទុកកូនខាងស្តាំ
            delete root;              // លុប Node នោះចោល
            return temp;              // យកកូនខាងស្តាំមកជំនួសកន្លែងវា
        }
        // ករណីទី២ (បន្ត): Node នោះមានកូនតែខាងឆ្វេងមួយ (គ្មានកូនស្តាំ)
        else if(root->right == nullptr) {
            Node *temp = root->left;  // ចម្លងទុកកូនខាងឆ្វេង
            delete root;              // លុប Node នោះចោល
            return temp;              // យកកូនខាងឆ្វេងមកជំនួសកន្លែងវា
        }
        // ករណីទី៣: Node នោះមានកូនទាំងពីរ (ឆ្វេងផង ស្តាំផង)
        Node *temp = findMin(root->right); // រកតម្លៃតូចបំផុតនៅខាងស្តាំមកជំនួស
        root->data = temp->data;           // យកតម្លៃនោះមកដាក់ក្នុង Node នេះ
        // លុប Node ដើមដែលនៅខាងស្តាំចេញដើម្បីកុំឱ្យជាន់តម្លៃគ្នា
        root->right = deleteNode(root->right, temp->data); 
    }
    return root;
}


 //5.អនុគមន៍បង្ហាញលទ្ធផល (Display Methods)
// បង្ហាញតម្លៃតាមលំដាប់ Inorder (ឆ្វេង -> មេ -> ស្តាំ) លទ្ធផលចេញពីតូចទៅធំ
void inorder(Node *root) {
    if(root == nullptr) return; 
    inorder(root->left);        // រត់ទៅឆ្វេង
    cout << root->data << " ";  // បោះពុម្ពតម្លៃលេខ
    inorder(root->right);       // រត់ទៅស្តាំ
}

// គូររូបរាង Tree ជារូបភាពអក្សរនៅលើ Console Screen (បង្ហាញបាន ៣ កម្រិត)
void displayTree(Node *root) {
    if(root == nullptr) {
        cout << "Tree Empty\n";
        return;
    }
    cout << "\n  " << root->data << endl; // បង្ហាញ Node មេខ្ពស់បំផុត (Level 1)
    if(root->left || root->right) {
        cout << " /   \\" << endl;          // គូរមែកធ្លាក់មកក្រោម
        if(root->left) cout << " " << root->left->data << "   "; // បង្ហាញកូនឆ្វេង (Level 2)
        else cout << "     ";
        if(root->right) cout << root->right->data << endl;       // បង្ហាញកូនស្តាំ (Level 2)
        else cout << endl;
    }
    // ពិនិត្យនិងគូរមែកសម្រាប់កូនៗនៅជាន់ទី ៣ (Level 3)
    if ((root->left && (root->left->left || root->left->right)) || (root->right && (root->right->left || root->right->right))) {
        cout << " / \\   / \\" << endl;
        cout << " ";
        if(root->left && root->left->left) cout << root->left->left->data << " "; else cout << "  ";
        if(root->left && root->left->right) cout << root->left->right->data << " "; else cout << "  ";
        cout << " ";
        if(root->right && root->right->left) cout << root->right->left->data << " "; else cout << "  ";
        if(root->right && root->right->right) cout << root->right->right->data << " "; else cout << "  ";
        cout << endl;
    }
    cout << endl;
}

//៦. អនុគមន៍ចម្បង និងម៉ឺនុយបញ្ជា (Main Function & Menu)
int main() {
    Node *root = nullptr; // ចាប់ផ្តើមដំបូងកំណត់ Tree ឱ្យនៅទទេ (Null)
    int choice, value;

    do {
        // បង្ហាញផ្ទាំងជ្រើសរើស (Menu) លើអេក្រង់
        cout << "\n========= BST MENU =========\n";
        cout << "1. Insert Node\n";
        cout << "2. Show Tree\n";
        cout << "3. Delete Node\n";
        cout << "4. Exit\n";
        cout << "Enter choice: ";
        cin >> choice; // ទទួលយកលេខជម្រើសពីអ្នកប្រើប្រាស់

        switch(choice) {
            case 1: { // បញ្ចូល Node ថ្មី
                int qty, value;
                cout << "How many nodes to insert? ";
                cin >> qty; // សួរចំនួនលេខដែលត្រូវបញ្ចូល
                for(int i = 1; i <= qty; i++) {
                    cout << "Enter value " << i << ": ";
                    cin >> value; // ទទួលយកតម្លៃលេខម្តងមួយៗ
                    root = insert(root, value); // ហៅអនុគមន៍ Insert យកទៅរក្សាទុក
                }
                cout << "Inserted " << qty << " nodes successfully!\n";
                break;
            }
            case 2: // បង្ហាញទិន្នន័យ Tree
                cout << "\nInorder Traversal: ";
                inorder(root); // បង្ហាញលេខរៀបពីតូចទៅធំ
                cout << endl;
                displayTree(root); // គូររូបរាង Tree ឱ្យមើល
                break;
            case 3: // លុប Node ចោល
                cout << "Enter value to delete: ";
                cin >> value; // ទទួលយកលេខដែលចង់លុប
                root = deleteNode(root, value); // ហៅអនុគមន៍លុប
                cout << "Deleted Successfully!\n";
                break;
            case 4: // ចាកចេញ
                cout << "Exiting...\n";
                break;
            default: // បើចុចខុសពីលេខ ១ ដល់ ៤
                cout << "Invalid choice!\n";
        }
    } while(choice != 4); // បើមិនទាន់ចុចលេខ ៤ កម្មវិធីនឹងរត់រហូត (Loop)

    return 0;
}