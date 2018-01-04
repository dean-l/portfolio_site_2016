<%@ page import ="java.sql.*" %>

<%

String driverName="com.mysql.jdbc.Driver";
String url="jdbc:mysql://localhost:3306/";
String databaseName="mysql";
String userName="test";
String password="test";
Connection con = null;
try{
  Class.forName(driverName);
  con=(Connection) DriverManager.getConnection(url+databaseName, userName, password);
  out.println("Connection : "+con);
}
catch(Exception e){
  out.println("Database not connected");
  e.printStackTrace();
}

%>
