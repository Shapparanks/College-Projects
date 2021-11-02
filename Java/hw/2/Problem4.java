import java.util.Scanner;

public class Problem4 {
  public static void main(String[] args) {
    
    Scanner input = new Scanner(System.in);
    
    System.out.print("Enter the first x value: ");
    double x1 = input.nextDouble();

    System.out.print("Enter the second x value: ");
    double x2 = input.nextDouble();

    System.out.print("Enter the first y value: ");
    double y1 = input.nextDouble();

    System.out.print("Enter the second y value: ");
    double y2 = input.nextDouble();

    double xSolved = (x2) - (x1);
    double ySolved = (y2) - (y1); // JA: You don't need these parenthesis

    System.out.println("The slope for the line that connects two points" + (x1 + "," + x2) + " and " + (y1 + "," + y2)+ " is " + ySolved / xSolved);


  }
}