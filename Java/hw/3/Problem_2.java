import java.util.Scanner;

public class Problem_2 {
  public static void main(String[] args) {

    Scanner input = new Scanner(System.in);
    
    //Get all value to calculate slope
    
    // You can get all the values with a single prompt
    System.out.print("Enter the first x value: ");
    double x1 = input.nextDouble();

    System.out.print("Enter the second x value: ");
    double x2 = input.nextDouble();

    System.out.print("Enter the first y value: ");
    double y1 = input.nextDouble();

    System.out.print("Enter the second y value: ");
    double y2 = input.nextDouble();

    //Both doubles will be used to calculate the slope.
    double xSolved = (x2) - (x1);
    double ySolved = (y2) - (y1);
    
    // Find the value for M
    double m = ySolved / xSolved;

    //Find the value of B
    double b = y1 - m * x1;

    if (m == 1 && b == 0 ) 
        System.out.println("The line equation for two points (" + x1 + "),(" + y1 +") and ("+ x2 + "),(" + y2 +") is  y = x");
    else if (m == 1) 
        System.out.println("The line equation for two points (" + x1 + "),(" + y1 +") and ("+ x2 + "),(" + y2 +") is  y = x + " +b);
    
    else if (b == 0)
        System.out.println("The line equation for two points (" + x1 + "),(" + y1 +") and ("+ x2 + "),(" + y2 +") is  y = "+ m +"x");
    
    else if (b < 0)
        System.out.println("The line equation for two points (" + x1 + "),(" + y1 +") and ("+ x2 + "),(" + y2 +") is  y = "+ m + "x " + b);
    else 
        System.out.println("The line equation for two points (" + x1 + "),(" + y1 +") and ("+ x2 + "),(" + y2 +") is  y = "+ m +"x +" + b);

    }
  }

