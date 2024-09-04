<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://sdk.cashfree.com/js/v3/cashfree.js"></script>
  </head>
  <body>
    <button type="button" id="renderBtn">
      Pay Now
    </button>
  </body>
  <script>
      const cashfree = Cashfree({
        mode: "sandbox" //or production,
      });
      document.getElementById("renderBtn").addEventListener("click", () => {
        cashfree.checkout({
          paymentSessionId: "session_rjibf_O6yBzCJXQ-jCTIyw7xh8FzpB2lH2lrskx2zJo1Es-woSXYwTJiislWGOmuyn2BUdkkcPOswz2P0ptxZFtAN_fwnmUU0DA3zmfugOlB"
        });
      });
  </script>
</html>