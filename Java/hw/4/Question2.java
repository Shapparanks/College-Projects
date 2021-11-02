import java.util.Scanner;

public class Question2 {
    
    public static void main(String[] args) {
        
        //x and y values set to 0
        int x = 0, y = 0;
        Scanner input = new Scanner(System.in);

        System.out.print("Enter the number of sides: ");

        //Scans the number of sides 
        int sides = input.nextInt();

        System.out.print("Enter the radius of bounding circle: ");

        //Scans radius
        int rad = input.nextInt();
        System.out.println("The coorrdinates of points on polygon are:");
        for (int i = 0; i < sides; i ++) {

            //Calculate the angle
            double ang = 2 * Math.PI * i / sides;

            //Calculate the X and Y
            double nx = x + rad * Math.cos(ang);
            double ny = y + rad * Math.sin(ang);

            //Format output to 2 decimal places
            System.out.format("(%.2f , %.2f)\n",nx,ny);
        }
    }
}
