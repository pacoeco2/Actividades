package Java.HashTable;

public class HashTable {
	int size;
	public Nodo Nodo;
	Nodo[] datamap;
	
	public HashTable(int size) {
		this.datamap = new Nodo[size];
		this.size=size;
	}
	
	
	public void set(String Key, int value){
		Nodo n1 = new Nodo();
		n1.Set(value,Key);
		HashF L = new HashF();
		int size1 = L.HashFun(n1.Key, n1.value);
		datamap[size1]=n1;
	}
}
