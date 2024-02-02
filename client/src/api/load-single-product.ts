import { SERVER_LINK } from "../components/constants/AppConstants.ts";

export const fetchProductData = async (productId:any) => {    
    try {
      const response = await fetch(`${SERVER_LINK}/server/load-single-product.php?id=${productId}`);
      const data = await response.json();
      return data;
    } catch (error) {
      console.error('Error fetching product data:', error);
      throw error;
    }
};