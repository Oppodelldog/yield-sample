Example for PHP **yield**

Recently I stumbled over the PHP keyword **yield** and wanted to
try it out.

**So here's a concrete use case to use yield**

1. Assume there's a Repository that returns a list of items.  
2. Each items also is defined as an array.    
3. Assume you want to convert the raw array data into some Model

Dive into the code [here](index.php)


The use of yield here is to compose an enhanced Repository ```GeneratorItemRepository``` that returns a List of DataModels instead of a list of arrays.
  
To achieve this the new Repository calls the appropriate original function to get the raw data, but then,  **on the fly**, it generates
Data Models from the raw data while it is accessed in a **foreach** iteration.

