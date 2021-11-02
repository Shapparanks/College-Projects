import java.util.Scanner;

public class ProblemOne {

    // Primary method
    public static void main(String[] args) {

        // Taking in the user input
        Scanner input = new Scanner(System.in);
        int decimal;
        System.out.print("Enter a postive decimal integer: ");
        decimal = input.nextInt();
        // Call decimal method
        String bNumber = decimalToBinary(decimal);
        // Display output
        System.out.println("Binary: " + bNumber);
    }

    public static String decimalToBinary(int value) {

        String bNumber = "";
        if (value <= 0) {
            System.out.println("You entered a number that is negative. The program will now terminate. ");
            System.exit(0);

        } else {
            while (value != 0) {
                if (bNumber.length() % 5 == 0) {
                    bNumber = " " + bNumber;
                }
                bNumber = (value % 2) + bNumber;
                value /= 2;
            }
        }
        return bNumber;
    }

}
