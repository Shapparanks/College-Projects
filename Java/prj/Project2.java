import java.util.*;
import java.lang.Math;
public class Project2 {
        public static void main(String[] args) {
                // Taking thee user input
                Scanner input = new Scanner(System.in);
                //Double for the amount and interest
                double am,in;
                //Total years
                int years;
                System.out.print("Enter investment amount: ");
                am = input.nextDouble();
                System.out.print("Enter interest rate: ");
                in = input.nextDouble();
                System.out.print("Enter number of years: ");
                years = input.nextInt();
                //Calling method to calculate furture amounts of money
                
                double value=futureInvestmentValue(am,in,years);
                System.out.println("The final returns is "+ value);
        }

        private static double futureInvestmentValue(double investmentAmount, double monthlyInterestRate, int years) {
                System.out.println("Years        Future Value");
                double money = 0;
                for(int i = 1;i <= years;i++) {
                        //Equation to calculate amount per year.
                        money = investmentAmount * Math.pow((1 + (monthlyInterestRate / 12)),i * 12);
                        System.out.println(" "+ i +"             "+ money);
                }
                return money;
        }

}
