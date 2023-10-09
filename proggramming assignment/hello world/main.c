#include <stdio.h>
#include <stdlib.h>

int main(void)
{
    int a,b,c,d;
    printf("enter the first value:");
    scanf("%d",&a);
    printf("enter the second value:");
    scanf("%d",&b);
    printf("enter the third value:");
    scanf("%d",&c);
    d=a+b+c;
    printf("%d+%d+%d=%d\n",a,b,c,d);
    return 0;
}
