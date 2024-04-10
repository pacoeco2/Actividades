package Java.HashTable;

public class HashF {
	int HashFun(String Key,int size) {
		return Key.length()%size;
	}
}
