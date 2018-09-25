public class encrypt {
    private String passWord;
    private String encryptPassWord;

    public encrypt(String passWord) {

        this.passWord = passWord;
    }

    public void setPassWord(String passWord) {
        this.passWord = passWord;
        passWord.toLowerCase();
        StringBuilder enPass = new StringBuilder();
        for(int count = 0; count < passWord.length(); count++){
            switch (passWord.charAt(count)){
                case 'a' : enPass.append('q');
                break;
                case 'b' : enPass.append('w');
                    break;
                case 'c' : enPass.append('e');
                    break;
                case 'd' : enPass.append('r');
                    break;
                case 'e' : enPass.append('t');
                    break;
                case 'f' : enPass.append('y');
                    break;
                case 'g' : enPass.append('u');
                    break;
                case 'h' : enPass.append('i');
                    break;
                case 'i' : enPass.append('o');
                    break;
                case 'j' : enPass.append('p');
                    break;
                case 'k' : enPass.append('a');
                    break;
                case 'l' : enPass.append('s');
                    break;
                case 'm' : enPass.append('d');
                    break;
                case 'n' : enPass.append('f');
                    break;
                case 'o' : enPass.append('g');
                    break;
                case 'p' : enPass.append('h');
                    break;
                case 'q' : enPass.append('j');
                    break;
                case 'r' : enPass.append('k');
                    break;
                case 's' : enPass.append('l');
                    break;
                case 't' : enPass.append('z');
                    break;
                case 'u' : enPass.append('x');
                    break;
                case 'v' : enPass.append('c');
                    break;
                case 'w' : enPass.append('v');
                    break;
                case 'x' : enPass.append('b');
                    break;
                case 'y' : enPass.append('n');
                    break;
                case 'z' : enPass.append('m');
                    break;
                case '!' : enPass.append('+');
                    break;
                case '@' : enPass.append('=');
                    break;
                case '#' : enPass.append('-');
                    break;
                case '$' : enPass.append('_');
                    break;
                case '_' : enPass.append('*');
                    break;
                case '^' : enPass.append('&');
                    break;
                case '&' : enPass.append('^');
                    break;
                case '*' : enPass.append('%');
                    break;
                case '-' : enPass.append('$');
                    break;
                case '+' : enPass.append('#');
                    break;
                case '=' : enPass.append('@');
                    break;
                case '<' : enPass.append('!');
                    break;
                case '>' : enPass.append('<');
                    break;
                case '0' : enPass.append('2');
                    break;
                case '1' : enPass.append('1');
                    break;
                case '2' : enPass.append('3');
                    break;
                case '3' : enPass.append('5');
                    break;
                case '4' : enPass.append('4');
                    break;
                case '5' : enPass.append('6');
                    break;
                case '6' : enPass.append('8');
                    break;
                case '7' : enPass.append('7');
                    break;
                case '8' : enPass.append('9');
                    break;
                case '9' : enPass.append('0');
                    break;
            }

        }
        this.encryptPassWord = enPass.toString();
    }

    public String getencryptPassWord() {
        return encryptPassWord;
    }
}
