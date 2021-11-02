import java.util.*;

public class Pro1 {
    public static void main(String []args){
        Scanner input = new Scanner(System.in);
            System.out.println("Enter the number of items:");
          
        int object = input.nextInt();
        double [] w = new double[object];
          System.out.println("Enter the weights for each item:");
          
        for(int i = 0; i < object; i++){
            w[i] = input.nextDouble();
        }
          System.out.println("Enter the weight limit for the bag:");
        double weightLimit = input.nextDouble();
          System.out.println("The maximum weight of the items placed in the bag is " + m(object, weightLimit, w) );
        }
    public static double m(int i, double weightLimit, double[] w){
  
        if(i <= 0 || weightLimit <= 0)
            return 0;
              
        if(w[i - 1] > weightLimit)
            return m(i - 1, weightLimit, w);
              return Math.max(m(i - 1, weightLimit, w), w[i - 1] + m(i - 1, weightLimit - w[i - 1], w)); 
            }
        }


