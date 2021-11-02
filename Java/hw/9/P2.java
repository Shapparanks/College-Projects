import java.util.Scanner;

public class P2 {

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
            System.out.print("Enter a binary number: ");
        
            String value = input.nextLine();
        
        try {
            System.out.println("The decimal value of " + value + " is " + bin2Dec(value)); } 
        catch (NumberFormatException e) {
            System.out.println( value + " is not a binary number.");}
    }
    
    public static int bin2Dec(String binaryString) throws NumberFormatException {
        int t = 0;
        for(int i = 0; i < binaryString.length(); ++i) {
            if(binaryString.charAt(i) != '0' && binaryString.charAt(i) != '1') {
                throw new NumberFormatException(); }
            t += Math.pow(2, binaryString.length() - i - 1) * (binaryString.charAt(i) - '0'); }
        return t; }
}