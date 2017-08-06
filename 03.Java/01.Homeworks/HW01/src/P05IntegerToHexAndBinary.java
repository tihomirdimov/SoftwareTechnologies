import java.util.Scanner;

public class P05IntegerToHexAndBinary {
    public static void main(String args[]) {
        Scanner scan = new Scanner(System.in);
        int input = Integer.parseInt(scan.nextLine());
        String outputHex = Integer.toHexString(input);
        String outputBinary = Integer.toBinaryString(input);
        System.out.println(outputHex.toUpperCase());
        System.out.println(outputBinary);
    }
}
