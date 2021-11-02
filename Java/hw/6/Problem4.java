import java.util.Scanner;
public class Problem4 {
   public static void main(String[] args) {
   Scanner input = new Scanner(System.in); 
  
   double alpha,beta,charlie,delta;
  
       System.out.print("Enter a, b, c, d: ");
       
       alpha = input.nextDouble();
       
       beta = input.nextDouble();
       
       charlie = input.nextDouble();
       
       delta = input.nextDouble();
      
       double A[][] = {{alpha,beta},{charlie,delta}}; 
       A=inverse(A); 
      
    if(A[0][0]!= alpha) {

    for(int i = 0;i < 2;i++){
        for(int j = 0;j < 2;j++) {
            System.out.print(A[i][j]+" ");
      }
            System.out.println();
     }
    }
   }
   public static double[][] inverse(double[][] K) {
   
     double determ=K[0][0] * K[1][1]- K[0][1] * K[1][0]; 
   
        if(determ == 0) 
            System.out.println("No inverse matrix.");
        else {
        
        
        double t = K[0][0];
        K[0][0] = K[1][1];
         K[1][1] = t;
  
        //Adding " - " operation
        K[0][1] = -(K[0][1]);
        K[1][0] = -(K[1][0]);
  
        for(int i = 0;i < 2;i++) {
   
            for(int j = 0;j < 2;j++){

            K[i][j] = K[i][j]/determ;
      }
    }
}
   return K;
   }
}

