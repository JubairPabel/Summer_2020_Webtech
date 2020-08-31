using System;
using System.Collections;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data;
using MySql.Data.MySqlClient;
namespace AI_Fridge
{
    public class BLClass
    {
       
        DBHandler db = new DBHandler();

        public BLClass()
        {

        }

        public string  DoThingFromDB()
        {
            ArrayList listOfUsers = db.getAllUsers();
            StringBuilder str = new StringBuilder();

            for (int i = 0; i< listOfUsers.Count;i++)
            {
                User us = (User)listOfUsers[i];
                this.verify

            }
        }

        public int verify(string username , string id)
        {

        }
            
    }

}
