public class dencrypt {
    private String passWord;
    private String deencryptedPassword;

    public dencrypt(String passWord) {
        this.passWord = passWord;
    }

    public void setencryptPassWord(String encryptedpassWord) {
        this.passWord = encryptedpassWord;
        passWord.toLowerCase();
        StringBuilder enPass = new StringBuilder();
        for(int count = 0; count < passWord.length(); count++){
            switch (passWord.charAt(count)){
                case 'q' : enPass.append('a');
                    break;
                case 'w' : enPass.append('b');
                    break;
                case 'e' : enPass.append('c');
                    break;
                case 'r' : enPass.append('d');
                    break;
                case 't' : enPass.append('e');
                    break;
                case 'y' : enPass.append('f');
                    break;
                case 'u' : enPass.append('g');
                    break;
                case 'i' : enPass.append('h');
                    break;
                case 'o' : enPass.append('i');
                    break;
                case 'p' : enPass.append('j');
                    break;
                case 'a' : enPass.append('k');
                    break;
                case 's' : enPass.append('l');
                    break;
                case 'd' : enPass.append('m');
                    break;
                case 'f' : enPass.append('n');
                    break;
                case 'g' : enPass.append('o');
                    break;
                case 'h' : enPass.append('p');
                    break;
                case 'j' : enPass.append('q');
                    break;
                case 'k' : enPass.append('r');
                    break;
                case 'l' : enPass.append('s');
                    break;
                case 'z' : enPass.append('t');
                    break;
                case 'x' : enPass.append('u');
                    break;
                case 'c' : enPass.append('v');
                    break;
                case 'v' : enPass.append('w');
                    break;
                case 'b' : enPass.append('x');
                    break;
                case 'n' : enPass.append('y');
                    break;
                case 'm' : enPass.append('z');
                    break;
                case '+' : enPass.append('!');
                    break;
                case '=' : enPass.append('@');
                    break;
                case '-' : enPass.append('#');
                    break;
                case '_' : enPass.append('$');
                    break;
                case '*' : enPass.append('_');
                    break;
                case '&' : enPass.append('^');
                    break;
                case '^' : enPass.append('&');
                    break;
                case '%' : enPass.append('*');
                    break;
                case '$' : enPass.append('-');
                    break;
                case '#' : enPass.append('+');
                    break;
                case '@' : enPass.append('=');
                    break;
                case '!' : enPass.append('<');
                    break;
                case '<' : enPass.append('>');
                    break;
                case '2' : enPass.append('0');
                    break;
                case '1' : enPass.append('1');
                    break;
                case '3' : enPass.append('2');
                    break;
                case '5' : enPass.append('3');
                    break;
                case '4' : enPass.append('4');
                    break;
                case '6' : enPass.append('5');
                    break;
                case '8' : enPass.append('6');
                    break;
                case '7' : enPass.append('7');
                    break;
                case '9' : enPass.append('8');
                    break;
                case '0' : enPass.append('9');
                    break;
            }

        }
        this.deencryptedPassword = enPass.toString();
    }

    public String getencryptPassWord() {
        return deencryptedPassword;
    }
}
