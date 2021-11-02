import java.util.*;
 
public class Problem2 {
   public static Point gCenterPoint(Point a1, Point b2, Point c3){
       Point dot = new Point();
       double x = (a1.gALPHA1() + b2.gALPHA1() + c3.gALPHA1()) / 3;
       double y = (a1.gBRAVO2() + b2.gBRAVO2() + c3.gBRAVO2()) / 3;
       
       dot.sALPHA1(x);
       dot.sBRAVO2(y);
       
       return dot;
   }
   public static void main(String[] args) {
       
      Point a1 = new Point();
      Point b2 = new Point();
      Point c3 = new Point();
      Point d4 = new Point();
       
      Scanner input = new Scanner(System.in);
       
       System.out.println("Enter x1 and y1");
       a1.sALPHA1(input.nextDouble());
       a1.sBRAVO2(input.nextDouble());
       
       System.out.println("Enter x2 and y2");
       b2.sALPHA1(input.nextDouble());
       b2.sBRAVO2(input.nextDouble());
       
       System.out.println("Enter x3 and y3");
       c3.sALPHA1(input.nextDouble());
       c3.sBRAVO2(input.nextDouble());
       
       d4 = gCenterPoint(a1, b2, c3);
       System.out.println("The center point is at (" + d4.gALPHA1() + ", " + d4.gBRAVO2()+ ")");
   }
}
class Point {
   private double a1;
   private double b2;

   public double gALPHA1() {
       return a1;
   }

   public void sALPHA1(double a1) {
       this.a1 = a1;
   }

   public double gBRAVO2() {
       return b2;
   }

   public void sBRAVO2(double b2) {
       this.b2 = b2;
   }
   
   
}