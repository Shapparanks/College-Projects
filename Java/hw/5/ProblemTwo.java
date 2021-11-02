import java.lang.Character;
import java.util.Scanner;

public class ProblemTwo {
    public static void main (String[]args) {
        String s;
        
        Scanner input = new Scanner(System.in);
        System.out.print("Enter a string: ");

        s = input.nextLine();

        System.out.println("The new string is " + title(s));
    }
    public static String title(String s) {
        String result = "";
        for (int i = 0; i < s.length(); i++) {
            if (i == 0 || s.charAt(i - 1) == ' ') {
                result += Character.toUpperCase(s.charAt(i));
            } else {
                result += s.charAt(i);
            }
        }
        return result;
    }
}
        
    
