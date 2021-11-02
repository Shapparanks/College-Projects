import java.util.*;

public class Problem1 {
        // This is not the same signaature fro the problem
        static Coordinate lineLineIntersection(Coordinate A, Coordinate B, Coordinate C, Coordinate D) {

                double alpha1 = B.y - A.y;
                double bravo1 = A.x - B.x;
                double charlie1 = alpha1 * (A.x) + bravo1 * (A.y);

                double alpha2 = D.y - C.y;
                double bravo2 = C.x - D.x;
                double charlie2 = alpha2 * (C.x) + bravo2 * (C.y);

                double value = alpha1 * bravo2 - alpha2 * bravo1;

                if (value == 0) {
                        return new Coordinate(Double.MAX_VALUE, Double.MAX_VALUE);
                } else {
                        double x = (bravo2 * charlie1 - bravo1 * charlie2) / value;
                        double y = (alpha1 * charlie2 - alpha2 * charlie1) / value;
                        return new Coordinate(x, y);
                }
        }

        public static void main(String args[]) {
                Scanner input = new Scanner(System.in);
                double x1, y1, x2, y2, x3, y3, x4, y4;
                System.out.println("Enter x1,y1,x2,y2,x3,y3,x4,y4: ");
                x1 = input.nextDouble();
                y1 = input.nextDouble();
                x2 = input.nextDouble();
                y2 = input.nextDouble();
                x3 = input.nextDouble();
                y3 = input.nextDouble();
                x4 = input.nextDouble();
                y4 = input.nextDouble();
                Coordinate H = new Coordinate(x1, y1);
                Coordinate I = new Coordinate(x2, y2);
                Coordinate J = new Coordinate(x3, y3);
                Coordinate K = new Coordinate(x4, y4);

                Coordinate intersection = lineLineIntersection(H, I, J, K);

                if (intersection.x == Double.MAX_VALUE && intersection.y == Double.MAX_VALUE) {
                        System.out.println("The two lines are parallel.");
                }

                else {

                        System.out.print("The intersection point is at: ");
                        Coordinate.displayCoordinate(intersection);
                }
        }

}

class Coordinate {
        double x, y;

        public Coordinate(double x, double y) // construct the points
        {
                this.x = x;
                this.y = y;
        }

        static void displayCoordinate(Coordinate p) { // Display x and y points
                System.out.println("Coordinate:" + "[" + p.x + ", " + p.y + "]");
        }
}
