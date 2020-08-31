using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Shapes;

namespace AI_Fridge
{
    /// <summary>
    /// Interaction logic for AIMODE.xaml
    /// </summary>
    public partial class AIMODE : Window
    {
       
        public AIMODE()
        {
            InitializeComponent();
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {

        }

        private void Button_Click_1(object sender, RoutedEventArgs e)
        {
            this.Hide();
            Main_Menu mm = new Main_Menu();
            mm.Show();
               
        }
    }
}
