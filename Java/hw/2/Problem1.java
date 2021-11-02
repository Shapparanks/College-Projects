import java.util.Scanner;

public class Problem1 {
    public static void main(String[] args) {
        //float width, height;
        Scanner input = new Scanner(System.in);
        //print statement that asks for height of rectangle
        System.out.print("Enter height of rectangle: ");
        //store inputed value in height
        double height = input.nextDouble();
        //asks for width
        System.out.println("Enter Width of rectangle: ");
        //stores value in width
        double width = input.nextDouble();

        System.out.println("The perimeter is " + (2 * (width + height)));
        System.out.println("The area is" + (width * height));
        System.out.println("The length of the diagonal is " + (Math.sqrt( width * width + height * height)));
        
        
    }
}