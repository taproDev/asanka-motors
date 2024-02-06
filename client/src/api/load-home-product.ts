import { AUTH_REQ, SERVER_LINK } from "../components/constants/AppConstants.ts";

export const fetchHomeProductData = async () => {
  try {
    const form = new FormData();
    form.append("auth", AUTH_REQ);

    const response = await fetch(
      `${SERVER_LINK}/server/load-home-product.php`,
      {
        method: "POST",
        body: form, // Sending form data directly
      }
    );

    const data = await response.json();
    return data;
  } catch (error) {
    console.error("Error fetching product data:", error.message);
    throw error;
  }
};
