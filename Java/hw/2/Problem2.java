import java.util.Scanner;

public class Problem2 {
  public static void main(String[] args) {
    Scanner input = new Scanner(System.in);
    
    System.out.print("Enter the ball travel time in seconds: ");
    double Time = input.nextDouble();
    
    double Acceleration = 9.8;
    
    System.out.println("The height of the building is: " + (0 * Time + Acceleration * Time * Time / 2 + " meters."));
    
  }
}