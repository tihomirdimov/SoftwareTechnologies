import java.util.Scanner;

public class P01VariableInHexadecimalFormat {
    public static void main(String args[]) {
        Scanner scan = new Scanner(System.in);
        String input = scan.nextLine();
        Integer output = Integer.parseInt(input,16);
        System.out.print(output);
    }
}
