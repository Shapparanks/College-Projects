public class Prob2 {
    //Given code to write off of 
    public static void main(String[] args) throws CloneNotSupportedException {
        tChick [] list= new tChick[5];
        list[0]= new Chicken(); 
        list[0].setWeight(4.5); 
        list[1]= new Tiger(); 
        list[1].setWeight(46.6); 
        list[2]= new Chicken(); 
        list[2].setWeight(1.5); 
        list[3]= (tChick) (list[0].clone());
        list[3].setWeight(7.5);
        list[4]= (tChick) (list[1].clone()); 

        java.util.Arrays.sort(list);
        for(int i=0;i<list.length;i++){
            System.out.println("weight: "+list[i].getWeight());
        }
    }
 }
 //End of given code 

      //Comparable and Cloneable implemented to animal class
class tChick implements Comparable<tChick>, Cloneable{
   private double w;

   //getter method 
   public double getWeight() {
       return w;
   }

   //Setter method
   public void setWeight(double weight) {
       this.w = weight;
   }
   @Override
   public int compareTo(tChick a) {
       double aWeight = a.getWeight();
       return (int) (this.getWeight() - aWeight);
   }
   @Override
   protected Object clone() throws CloneNotSupportedException {
       return super.clone();
   }
}
    class Chicken extends tChick{
}
    class Tiger extends tChick{
}

