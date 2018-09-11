# 适配器模式

# 目的
        将某个类的接口转换成与另一个接口兼容，适配器通过将原始接口进行转换，给用户提供一个兼容接口，
    使得原来因为接口不同而无法一起使用的类可以得到兼容。要对方法做适配，对返回值做适配。

# 例子
    1. 数据库客户端库适配器
    2. 使用不同的webservices，通过适配器来标准化输出数据，从而保证不同webservices输出数据是一致的