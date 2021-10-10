## Introduction
This is just a sample application which demonstrate the one of the many ways to structure application following the
[Hexagonal Architecture Pattern](https://dzone.com/articles/hexagonal-architecture-what-is-it-and-how-does-it).

## Structure

The app will be broken down into three modules Application, Domain & Infrastructure.

1) Application : Application will be the gateway which will get the necessary dependencies from infrastructure and starts working with Domain by using usecases that is inside the Domain.
2) Domain : Domain will handle all the business rules and the ports inside it. If you open ports inside Domain you can see it has interface defining repository and uses the same interface blueprint to carry out the operations. So when the app is initialized the framework will resolve dependencies and inject concrete implementation which is adaptor.
3) Infrastructre : Infrastructure mostly handle the third party libraries (sending emails, loggers, sms notification) & persistence  (database connector, ORM, repositories etc)
