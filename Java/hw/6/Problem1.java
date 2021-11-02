import java.util.Scanner; 

public class Problem1  { 
 public static double polyArea(double X[], double Y[], int k) { 
     double a = 0.0; 
   
     int j = k - 1; 
     for (int i = 0; i < k; i++) { 
         a += (X[j] + X[i]) * (Y[j] - Y[i]); 
         j = i;  
     } 
     return Math.abs(a / 2.0); 
 } 

 public static void main (String[] args) { 
         
        int l=6;
         
         double valueX[]=new double[l];
         double valueY[]=new double[l];
         
         Scanner input = new Scanner(System.in);
         
            System.out.println("Enter 6 sides for polygon:");
         
        for(int i=0;i<6;i++) {
                 valueX[i]=input.nextDouble();
                 valueY[i]=input.nextDouble();
         }
                System.out.println(polyArea(valueX, valueY, l)); 
     
     
 } 

}