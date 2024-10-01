<%@ page import="java.sql.*" %>
<%
try
{
Class.forName("oracle.jdbc.driver.OracleDriver");
Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:XE","system","11vij");   
String un=request.getParameter("search");
PreparedStatement st=con.prepareStatement("select address from book_info where search=?");
st.setString(1,un);
ResultSet rs=st.executeQuery(); 
int x=0;
while(rs.next())
{
x++;
	response.sendRedirect(rs.getString("address"));
}
if(x==0)
{
	out.println("Sorry we can't provide above mentioned information");
     //response.sendRedirect("invalid.html");
}
}
catch(Exception e)
{
System.out.println(e);
}
%>