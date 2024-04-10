package Java.HashTable;

public class Nodo {
	
	String Key;
    int value;
    Nodo next;

    public void Set(int value,String Key) {
        this.value=value;
    	this.Key=Key;
    	this.next=null;
    }

}