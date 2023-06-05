# Laravel with GraphQl


## Folder Structure
- Mutations: This folder will contain classes that manage the insert, update, and delete operations.
- Queries: This folder will contain the classes that fetch data from the database.
- Types: You can think of this as a model, or a model resource. Basically types are objects that can be fetched from the database. For example, we are going to have a UserType and a ArticleType.

### Types
- Attributes: This is your type configuration. It has core information about your type, and to which model it associates.
- Fields: This method returns the fields that your client can ask for.

### Quires
- The attributes function is used as the query configuration.
- The type function is used to declare what type of object this query will return.
- The args function is used to declare what arguments this query will accept. In our case we only need the id of the quest.
- The resolve function does the bulk of the work – it returns the actual object using eloquent.

### Mutations
- The attributes function is used as mutation configuration.
- The type function is used to declare what type of object this query will return.
- The args function is used to declare what arguments this mutation will accept. In our case we only need the title field.
- The resolve function does the bulk of the work – it does the actual mutation using eloquent. 

Now we have to put everything together. 

***We have to register our queries, mutations, and types in our config/graphql.***
