import java.util.Scanner;

public class BooleanVariable {
    public static void main(String args[]) {
        Scanner scan = new Scanner(System.in);
        String input = scan.nextLine();
        switch (input){
            case ("True"):
                System.out.print("Yes");
                break;
            case ("False"):
                System.out.print("No");
                break;
        }
    }
}