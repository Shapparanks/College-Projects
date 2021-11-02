import java.util.Scanner;

public class Problem3 {
  public static void main(String[] args) {
    
    Scanner input = new Scanner(System.in);
    
    System.out.print("Enter a friction force in Newtons: ");
    double friction = input.nextDouble();

    System.out.print("Enter the object's mass in kg: ");
    double mass = input.nextDouble();

    System.out.print("Enter object's acceleration in m/s^2: ");
    double acceleration = input.nextDouble();

    double gravity = 9.8;
    double mg = mass * gravity;
    double ma = mass * acceleration;
    double coefficientF = friction - ma;

    System.out.println("The coefficient for friction is: " + coefficientF / mg );

    
    
    
  }
}
