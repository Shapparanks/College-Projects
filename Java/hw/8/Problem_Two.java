import java.util.*;

// The heavy objects go first
public class Problem_Two {
        

        public static void main(String[] args){ 
                int beta = 10; 
                    System.out.println("Enter the total number of objects: ");
        Scanner input = new Scanner(System.in);
        
        int alpha = input.nextInt();
            System.out.println("Enter the weights of objects:");
        
            int []obj = new int[alpha];
        
            for(int i = 0; i < alpha; i++)
            obj[i] = input.nextInt();

                
                System.out.println("Number of bins required : " + binNext(obj, alpha, beta)); 
        } 
        static int binNext(int w[], int a, int b) { 

                int kappa = 1, bin = b; 

                for (int i = 0; i < a; i++) { 
                        if (w[i] > bin) { 
                                kappa++; 
                                bin = b - w[i]; } 
                        else
                                bin -= w[i]; 
                        
                        if((w[i]+bin)==10){
                                System.out.println("Container "+kappa+" contains objects with weight "+ w[i]+" "+bin); }
                } 
                return kappa; 
        }
} 


