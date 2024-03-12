<div>
    <p>
        Hi, I would like to add a button to a page that invokes a database action. Let's call the action "apply". When pressing the button the apply method from the controller should be invoked. This function will take the $id of the specific record being applied. Using the $id, the value is looked up and then added to a value in another table. So what I did was:

I added this line to index.blade.php


And added the apply function to CashbookTransactionController.

    public function apply($id)
    {
        return ('Success! '.$id);
    }
However, I get an error message: Route [cashbooktransactions.apply] not defined. I looked in web.php, but I do not understand if, and what I need to add here. Any help is much apreciated.</p>{{-- If your happiness depends on money, you will never be happy with yourself. --}}
</div>
