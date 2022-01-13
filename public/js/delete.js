
const msg = "真的確定要刪除嗎？\n\n刪除後無法復原！";
let deleteBtns = document.querySelectorAll('.delete-btn')
deleteBtns.forEach(deleteBtn => {
  deleteBtn.addEventListener('click', function () {
    if (confirm(msg) == true) {
      this.nextElementSibling.submit();
    } else {
      return false;
    }
  })
});
