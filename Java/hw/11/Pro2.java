import java.util.*;
import java.util.ArrayList;
public class Pro2 {
    
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
            System.out.print("Enter the number of items: ");
        
        int object = input.nextInt();
            System.out.print("Enter the weights for each item: ");
        
        double[] weightsArray = new double[object];
            for(int j = 0; j < object; j++) {
                weightsArray[j] = input.nextInt();
        }
        System.out.print("Enter the weight limit for the bag: ");
        int weightLimit = input.nextInt();

        ArrayList<Integer> result = m(object, weightLimit, weightsArray);
      
}

public static ArrayList<Integer> m(int i, double weightLimit, double[] w) {
        ArrayList<Integer> result = new ArrayList<Integer>();
            System.out.print("The maximum weight of the items placed in the bag is " + weightLimit);

        boolean mf = false;
        boolean mpf = false;
        int mi1 = -1, mi2 = -1;
        int mW = -1;
      
        for(int j = 0; j < i-1; j++) {
            for(int k = j+1; k < i; k++) {
                int sum = (int) (w[j] + w[k]);
                      
                    if(sum == weightLimit) {
                        mf = true;
                        mi1 = j;
                        mi2 = k;
                        break; }
                    else if(sum < weightLimit) {
                        if(sum > mW) {
                            mW = sum;
                            mi1 = j;
                            mi2 = k;      
                            mpf = true; }
                        }
                }     
        if(mf)
            break;
        }     
      
        System.out.println("");
        
        if(mf || mpf) {
                System.out.println("The items in the bag are #" + (mi1+1) + " #" + (mi2+1));
                System.out.println("The weights of the items in the bag are " + w[mi1] + " " + w[mi2]);
                result.add((int) w[mi2]);
                result.add((int) w[mi2]);
        }
        return result;
    }
}