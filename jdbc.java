import java.sql.*;
import java.io.*;

 class jdbc
{
	public static void main(String args[])
	{
		try
		{
			Class.forName("com.mysql.jdbc.Driver");
			Connection con= DriverManager.getConnection("jdbc:mysql://localhost:/3306/lks","root","");
			Statement st=con.createStatement();
			String sql= "select * from sks";
			ResultSet rs=st.executeQuery(sql);
			while(rs.next())
			{
				System.out.println("id "+rs.getInt(1));
				System.out.println("Name "+rs.getString(2));
				System.out.println("Password "+rs.getString(3));
			}
		}
		catch(Exception e)
		{
			System.out.println("error "+e);
		}
			
	}
}