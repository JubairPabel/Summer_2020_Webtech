using System;
using System.Collections;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data;
using MySql.Data.MySqlClient;

namespace AI_Fridge
{
    public class DBHandler
    {
        private MySqlConnection connection;
        private String server;
        private String database;
        private String uid;
        private String password;

        public DBHandler()
        {

            server = "localhost";
            database = "ai fridge";
            uid = "root";
            password = "";

            string connectionString;
            connectionString = "SERVER=" + server + ";" + "DATABASE=" + database + ";" + "UID=" + uid + ";" + "PASSWORD=" + password + ";";

            connection = new MySqlConnection(connectionString);

        }

        public System.Collections.ArrayList getAllUsers()
        {
            string query = "SELECT * FROM user";
            ArrayList list = new ArrayList();
            this.OpenConnection();
            MySqlCommand cmd = new MySqlCommand(query, connection);

            MySqlDataReader dataReader = cmd.ExecuteReader();

            while(dataReader.Read())
            {
                User us = new User();

                us.Username = dataReader["UserName"].ToString();
                us.pass = dataReader["Pass"].ToString();
                us.phone = (int)dataReader["Phone"];

                list.Add(us);
            }

            dataReader.Close();

            this.CloseConnection();



            return list;
        }

        private void OpenConnection()
        {
            try
            {
                connection.Open();
                

            }
            catch(MySqlException ex )
            {
                throw ex;
            }
        }

        private void CloseConnection()
        {
            try
            {
                connection.Close();
            }
            catch(MySqlException ex)
            {
                throw ex;
            }
        }


           
    }
}
