var confirmaexclusao    =   function(id, rota, nome){
    bootbox.dialog({
      message: "Tem certeza que deseja excluir <strong>\""+nome+"\"</strong> ?",
      title: "Exclusão",
      buttons: {
        success: {
            label: "Sim",
            main: "success",
            className: "btn-danger",
            callback: function() {
                window.location = rota+"/excluir/"+id;
            }
        },
        danger: {
            label: "Não",
            className: "btn-default",
        }
      }
    })
};

var confirmaexclusao    =   function(rota, nome){
    bootbox.dialog({
      message: "Tem certeza que deseja excluir <strong>\""+nome+"\"</strong> ?",
      title: "Exclusão",
      buttons: {
        success: {
            label: "Sim",
            main: "success",
            className: "btn-danger",
            callback: function() {
                window.location = rota;
                
            }
        },
        danger: {
            label: "Não",
            className: "btn-default",
        }
      }
    })
};