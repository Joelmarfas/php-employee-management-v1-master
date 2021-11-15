$("#jsGrid").jsGrid({
  width: "100%",
  height: "400px",
  filtering: true,
  inserting: true,
  editing: true,
  sorting: true,
  paging: true,
  autoload: true,
  pageSize: 5,
  pageButtonCount: 5,
  deleteConfirm: "Do you really want to delete data?",
  controller: {
    loadData: function(filter) {
      console.log(filter);
      return $.ajax({
        type: "GET",
        url: "../resources/employees.json",
        data: filter,
        dataType: "json"
      });
    },
    insertItem: function(item){
      return $.ajax({
        type: "POST",
        url: "../resources/employees.json",
        data: item,
        // dataType: "json"
      });
    },
    updateItem: function(item) {
      return $.ajax({
        type: "POST",
        url: "../resources/employees.json",
        data: item
      });
    },
    deleteItem: function(item) {
      return $.ajax({
        type: "DELETE",
        url: "../resources/employees.json",
        data: item
      });
    },
  },
  fields: [{
      name: "id",
      type: "text",
      css: "hide"
    },
    {
      name: "name",
      title: "Name",
      type: "text",
      width: 150,
      validate: "required"
    },
    {
      name: "email",
      title: "Email",
      type: "text",
      width: 150,
      // validate: "required"
    },
    {
      name: "age",
      title: "Age",
      type: "text",
      width: 50,
      validate: function(value) {
        if (value > 0) {
          return true;
        }
      }
    },
    {
      id: "",
      name: "streetAddress",
      title: "Street Nº",
      type: "text",
      width: 150,
      // validate: "required"
    },
    {
      name: "city",
      title: "City",
      type: "text",
      width: 150,
      // validate: "required"
    },
    {
      name: "state",
      title: "State",
      type: "text",
      width: 150,
      // validate: "required"
    },
    {
      name: "postalCode",
      title: "Postal Code",
      type: "text",
      width: 150,
      // validate: "required"
    },
    {
      name: "phoneNumber",
      title: "Phone Nº",
      type: "text",
      width: 150,
      // validate: "required"
    },
   
    // {
    //   name: "gender",
    //   type: "select",
    //   items: [{
    //       Name: "",
    //       Id: ""
    //     },
    //     {
    //       Name: "Male",
    //       Id: "man"
    //     },
    //     {
    //       Name: "Female",
    //       Id: "woman"
    //     }
    //   ],
    //   valueField: "Id",
    //   textField: "Name",
    //   validate: "required"
    // },
    {
      type: "control"
    }
  ]
})