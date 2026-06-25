private static void insertRecord(Scanner scanner, String dbName, String url, String user, String pass, String selectQuery) {
    System.out.println("\n--- [" + dbName + "] Choice E: Insert New Record ---");
    
    // Extract table name dynamically from the SELECT query
    String tableName = selectQuery.substring(selectQuery.lastIndexOf(" ") + 1);

    try (Connection conn = getConnectionHelper(url, user, pass);
         Statement stmt = conn.createStatement();
         ResultSet rs = stmt.executeQuery(selectQuery)) {

        ResultSetMetaData metaData = rs.getMetaData();
        int columnCount = metaData.getColumnCount();

        ArrayList<String> columnsToInsert = new ArrayList<>();
        ArrayList<String> valuesToInsert = new ArrayList<>();

        // 1. Prompt user for values based on column metadata
        for (int i = 1; i <= columnCount; i++) {
            // Skip AutoNumber / Identity / Auto-Increment columns automatically
            if (metaData.isAutoIncrement(i)) {
                continue; 
            }

            String columnName = metaData.getColumnName(i);
            System.out.print("Enter value for " + columnName + " (" + metaData.getColumnTypeName(i) + "): ");
            String input = scanner.nextLine();
            
            columnsToInsert.add(columnName);
            valuesToInsert.add(input);
        }

        // 2. Build the INSERT SQL statement dynamically
        StringBuilder sql = new StringBuilder("INSERT INTO " + tableName + " (");
        StringBuilder placeholders = new StringBuilder();

        for (int i = 0; i < columnsToInsert.size(); i++) {
            sql.append(columnsToInsert.get(i));
            placeholders.append("?");
            if (i < columnsToInsert.size() - 1) {
                sql.append(", ");
                placeholders.append(", ");
            }
        }
        sql.append(") VALUES (").append(placeholders).append(")");

        // 3. Execute statement safely using PreparedStatement
        try (PreparedStatement pstmt = conn.prepareStatement(sql.toString())) {
            for (int i = 0; i < valuesToInsert.size(); i++) {
                pstmt.setString(i + 1, valuesToInsert.get(i));
            }
            
            int rowsInserted = pstmt.executeUpdate();
            if (rowsInserted > 0) {
                System.out.println("✔ Record successfully added to " + dbName + "!");
            }
        }

    } catch (SQLException e) {
        System.out.println("❌ " + dbName + " Insertion Error: " + e.getMessage());
    }
}