# 组合模式

# 目的
    以单个对象的方式来对待一组对象
 
# 例子
    1. form类的实例包含多个子元素，而它也像单个子元素那样相应render()请求，当调用“render()”
    方法时，它会遍历所有的子元素，调用“render()”方法
    2. zend_config: 配置树选项，其每一个分支都是zend_config 