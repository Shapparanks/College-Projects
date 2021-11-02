import java.util.Scanner;
public class P3 {

    public static int bin2Dec(String binaryString) throws BinaryFormatException {
        int amount = 0;
        for(int i = 0; i < binaryString.length(); ++i) {
            if(binaryString.charAt(i) != '0' && binaryString.charAt(i) != '1') {
                throw new BinaryFormatException(binaryString + " is illegal binary String");
            }
            amount += Math.pow(2, binaryString.length() - i - 1) * (binaryString.charAt(i) - '0');
        }
        return amount;
    }

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
            System.out.print("Enter a binary number: ");
        
            String value = input.nextLine();
        
        try {
            System.out.println("The decimal value of " + value + " is " + bin2Dec(value)); } 
        catch (NumberFormatException e) {
            System.out.println( value + " is not a binary number.");}
    }
}

class BinaryFormatException extends NumberFormatException {
    public BinaryFormatException() {
    }

    public BinaryFormatException(String bfe) {
        super(bfe);
    }
}

