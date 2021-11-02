import java.util.Scanner;
import java.util.Random;
public class P1 {
    public static void main(String[] args) {
        
        final int amount = 100;
        Random num = new Random();

        Scanner input = new Scanner(System.in);

        int[] array = new int[amount];
        
        for(int i = 0; i < amount; i++){
            array[i] = 1 + num.nextInt(100);
        }
        System.out.print("Enter index of array: ");
            int in = input.nextInt();
        
        try {
            int ans = array[in];
                System.out.println("The value at index "+ in + " is " + ans);   
        }
        catch(ArrayIndexOutOfBoundsException error) {
            System.out.println("answer out of bounds.");
        }
    }
}
