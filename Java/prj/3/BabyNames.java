import java.util.*;
import java.io.*;
import java.util.ArrayList;
//define class
// Where is the BabyName class?
public class BabyNames {
    //define the main method
    public static void main(String[] args) {

          //create a scanner object
          Scanner input = new Scanner(System.in);

          //Enter year
          System.out.print("Enter the year: ");
          int y = input.nextInt();

          //Enter name
          System.out.print("Enter the name: ");
          String n = input.next();
        
          //Declaing variable for rank
          int r = 0;
          
          while (input.hasNext()) {
            //read line
            String rLine = input.nextLine();
            String[] detail = rLine.split("\t");
          }
          if (r == 0) {
            System.out.println("The name " + n + " is not ranked in year " + y); }

        //print the rank of the name.
        else {
            System.out.println(n + " is ranked #" + r + " in year " + y); }
     }

    private ArrayList <BabyNames> loadNames(String fileName) {

        ArrayList <BabyNames> namesList = new ArrayList<BabyNames>();
                    File bnr = new File(fileName);
                    Scanner readFile = new Scanner(new File("babynameranking" + y +".txt"));  
                    return namesList; 
                }
        


    public static BabyName findName(String n, int y, ArrayList<BabyName> names) { 
    

     }
}
