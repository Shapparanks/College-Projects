
//java code
import java.util.Scanner;

//main class
public class Problem3 {
    // main method
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        // declaration
        double[][] points = new double[3][2];
        System.out.print("Enter x1 y1 x2 y2 x3 y3: "); // ask for input
        for (int i = 0; i < points.length; i++)
            for (int j = 0; j < points[i].length; j++)
                points[i][j] = input.nextDouble(); // gets input from user

        double Area = getTriangleArea(points);
        // If area is 0
        if (Area == 0) {
            System.out.println("The three points are on the same line");
        } else // if area is 1
        {
            System.out.println("The area of the triangle is " + Area);
        }
    }

    // method to find Triangle Area
    // This is not the right signature for the method
    public static double getTriangleArea(double[][] points) {

        // Assigning the sides for the triangle
        double side1 = distanceBetweenTwoPoints(points[0][0], points[0][1], points[1][0], points[1][1]);
        double side2 = distanceBetweenTwoPoints(points[0][0], points[0][1], points[2][0], points[2][1]);
        double side3 = distanceBetweenTwoPoints(points[2][0], points[2][1], points[1][0], points[1][1]);
        double s = (side1 + side2 + side3) / 2;
        // calculate area of the triangle
        double Area = s * (s - side1) * (s - side2) * (s - side3);

        if (Area < 0.000001)
            return 0;
        else
            return Math.sqrt(Area);
    }

    // Method to find legnth between points
    public static double distanceBetweenTwoPoints(double x1, double y1, double x2, double y2) {
        return Math.sqrt((x1 - x2) * (x1 - x2) + (y1 - y2) * (y1 - y2));
    }

}
