import java.util.Scanner;
public class ProblemFour {
    
    static int sum(int number) {
        int f;
        for(f = 1; number > 1; number--) {
                f *= number; }
        return f; }
    //Method to calculate for the Pascal Triangle (11^(num))
    static int math(int n,int r) {
        return sum(n) / ( sum(n-r) * sum(r) ); }
    
    //Main Method
    public static void main(String args[]){
            int row, i, q;

            //Getting input from user
            System.out.println("Enter numberber of rows:");
            Scanner scanner = new Scanner(System.in);
            row = scanner.nextInt() + 1;
            for(i = 0; i < row; i++) {

                    for(q = 0; q < row-i; q++){
                            System.out.print(" ");
                    }
                    for(q = 0; q <= i; q++){
                            System.out.print(" "+math(i, q));
                    }
                    System.out.println();
            }
    }
}
 



