//Import Java Scanner Utility
import java.util.Scanner;

public class Question3 {

public static void main(String[] args) {

//Prompt user for input
    Scanner input = new Scanner(System.in);
        System.out.print("Enter a genome string: ");

    String DNA = input.nextLine();

    boolean found = false;

    int num = -1;

    for (int i = 0; i < DNA.length() - 2; i++) {

        String trip = DNA.substring(i, i + 3);

//Check input for genome patterns
        if (trip.equals("ATG")) {
            num = i + 3;} 
            
            else if (((trip.equals("TAG")) || (trip.equals("TAA")) || (trip.equals("TGA"))) &&
            (num != -1))
    {
    String gene = DNA.substring(num, i);
        if (gene.length() % 3 == 0) {
            found = true;
            System.out.println(gene);

            num = -1;
    }
  }
}
        if (!found)
            System.out.println("no gene is found");
  } 
}