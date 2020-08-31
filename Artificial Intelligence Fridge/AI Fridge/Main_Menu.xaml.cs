using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Drawing;
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
using System.Speech.Recognition;
using System.Speech.Synthesis;
using System.IO;

namespace AI_Fridge
{
    /// <summary>
    /// Interaction logic for Main_Menu.xaml
    /// </summary>
    public partial class Main_Menu : Window
    {
        SpeechRecognitionEngine spe = new SpeechRecognitionEngine();
        SpeechSynthesizer sps = new SpeechSynthesizer();
        Get_Items g = new Get_Items();
        Order_Items or = new Order_Items();
        Show_Items si = new Show_Items();
        AIMODE ai = new AIMODE();
        InsertBalance ib = new InsertBalance();
        public Main_Menu()
        {

            InitializeComponent();
        }

        

        
        private void Btnspeak(object sender, RoutedEventArgs e)
        {
            spe.SetInputToDefaultAudioDevice();
            spe.LoadGrammarAsync(new Grammar(new GrammarBuilder(new Choices(File.ReadAllLines(@"TextFile1.txt")))));
            spe.SpeechRecognized += Recognizer;
            spe.SpeechDetected += un_Recognizer;
            spe.RecognizeAsync(RecognizeMode.Multiple);

        }

        private void un_Recognizer(object sender, SpeechDetectedEventArgs e)
        {
           
        }

        private void Recognizer(object sender, SpeechRecognizedEventArgs e)
        {
            string speech = e.Result.Text;
           

            if (speech == "Get Items")
            {
                this.Hide();
                g.Show();

            }
        }

       

        private void Button_Click_getitems(object sender, RoutedEventArgs e)
        {
            this.Hide();
            g.Show();
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            this.Hide();
            or.Show();
        }

        private void Button_Click_1(object sender, RoutedEventArgs e)
        {
            this.Hide();
            si.Show();
        }

        private void Button_Click_2(object sender, RoutedEventArgs e)
        {
            this.Hide();
            ai.Show();
        }

        private void Button_Click_3(object sender, RoutedEventArgs e)
        {
            this.Hide();
            ib.Show();

        }
    }
}
