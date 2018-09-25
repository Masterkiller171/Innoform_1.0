
import java.io.*;
import java.util.Scanner;
import java.util.ArrayList;

public class fileRdr {
    public static ArrayList<String> second() throws IOException {
        Scanner read = new Scanner(System.in);
        ArrayList<String> dataArr = new ArrayList<>();
        System.out.println("What's the website or account name?");
        String fileName = read.nextLine();

        InputStream is = new FileInputStream("/Users/youri/Documents/IdeaProjects/TMCProjects/avansbreda-avansbreda-programmeren-1-2018-2019/Java_project/src/passWords/" + fileName + ".txt");
        File file = new File("/Users/youri/Documents/IdeaProjects/TMCProjects/avansbreda-avansbreda-programmeren-1-2018-2019/Java_project/src/passWords/" + fileName + ".txt");

        if(file.exists()) {
            BufferedReader buf = new BufferedReader(new InputStreamReader(is));

            String dataLine = buf.readLine();

            while (dataLine != null) {
                dataArr.add(dataLine);
            }
        }else{
            System.out.println("Account or website does not exist!");
        }
        return dataArr;
    }
}
